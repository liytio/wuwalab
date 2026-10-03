<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/**
 * Aturan susunan echo di Wuthering Waves:
 * - minimal 1 dan maksimal 5 echo
 * - setiap echo bernilai cost 1, 3, atau 4
 * - total cost tidak boleh melebihi 12
 */
class ValidEchoLoadout implements ValidationRule
{
    public const MAX_ECHOES = 5;
    public const MAX_TOTAL_COST = 12;
    public const ALLOWED_COSTS = [1, 3, 4];

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_array($value)) {
            $fail('Susunan echo tidak valid.');
            return;
        }

        $costs = self::normalize($value);

        if (count($costs) === 0) {
            $fail('Pilih minimal 1 echo.');
            return;
        }

        if (count($costs) > self::MAX_ECHOES) {
            $fail('Maksimal ' . self::MAX_ECHOES . ' echo dalam satu build.');
            return;
        }

        foreach ($costs as $cost) {
            if (! in_array($cost, self::ALLOWED_COSTS, true)) {
                $fail('Cost echo hanya boleh 1, 3, atau 4.');
                return;
            }
        }

        $total = array_sum($costs);
        if ($total > self::MAX_TOTAL_COST) {
            $fail("Total cost echo {$total} melebihi batas " . self::MAX_TOTAL_COST . '.');
        }
    }

    // Buang slot kosong dan ubah ke integer
    public static function normalize(array $value): array
    {
        $filled = array_filter($value, fn ($cost) => $cost !== null && $cost !== '');

        return array_values(array_map(fn ($cost) => is_numeric($cost) ? (int) $cost : $cost, $filled));
    }
}
