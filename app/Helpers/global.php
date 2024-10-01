<?php

if (!function_exists('convertBaseNum')) {
    /**
     * Convert a number from one base to another
     *
     * @param int $input_base
     * @param array $digits
     * @param int $output_base
     * @return array|bool
     */

    function convertBaseNum(int $input_base, array $digits, int $output_base): array|bool
    {
        // Some quick validation on bases
        if ($input_base < 2 || $output_base < 2) {
            return false;
        }

        $total = 0;
        for ($i = 0; $i < count($digits); $i++) {
            // Validate that no digits are greater than the base number
            if ($digits[$i] < 0 || $digits[$i] >= $input_base) {
                return false;
            }

            $total += ($digits[$i] * pow($input_base, (count($digits)) - 1 - $i));
        }

        // Default 0 is 0 in any base number
        if ($total == 0) {
            return [0];
        }

        // Determine number of digits needed to return a number in the requested base
        $length = 1;
        while ($total > $output_base * pow($output_base, $length) - 1) {
            $length += 1;
        }

        $output = [];
        for ($i = $length; $i > -1; $i--) {
            $digit = 1;
            while ($total > ($digit * pow($output_base, $i))) {
                $digit++;
            }

            if ($i > 0) {
                $digit--;
            }

            array_push($output, $digit);
            $total -= $digit * pow($output_base, $i);
        }

        if ($output[0] == 0) {
            return array_slice($output, 1);
        } else if ($output[count($output) - 1] == $output_base) {
            $output[count($output) - 2] += 1;
            $output[count($output) - 1] -= $output_base;
        }

        return $output;
    }
}
