<?php

/**
 * Diamond printing class.
 */
class Diamond {

    /**
     * Letters of the English alphabet.
     *
     * @var array
     */
    private $alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
                                'U', 'V', 'X', 'Y', 'Z'];

    /**
     * Return the position of the letter in the alphabet.
     *
     * @param string $letter
     * @return integer
     */
    public function getPosition(string $letter): int {
        if (in_array($letter, $this->alphabet)) {
            return array_search($letter, $this->alphabet) + 1;
        }

        return null;
    }

    /**
     * Build the diamond for output.
     *
     * @param string $letter
     * @return string
     */
    public function buildDiamond(string $letter): string {
        $position = $this->getPosition($letter);
        $diamond = '';
        $diamondArray = [];

        for ($i = 0; $i < $position; $i++) {
            $periods = '';
            $innerPeriods = '';
            for ($j = $position - $i; $j > 1; $j--) {
                $periods .= '.';
            }

            for ($k = 0; $k < $i*2-1; $k++) {
                if ($i == 0) {
                    continue;
                }

                $innerPeriods .= '.';
            }

            $diamond .= $periods . $this->alphabet[$i] . $innerPeriods .
                        ($i == 0 ? '' : $this->alphabet[$i]) . $periods . '<br>';
            
            $diamondArray[] = $periods . $this->alphabet[$i] . $innerPeriods .
            ($i == 0 ? '' : $this->alphabet[$i]) . $periods . '<br>';
        }

        for ($i = count($diamondArray) - 2; $i >= 0; $i--) {
            $diamond .= $diamondArray[$i];
        }

        return $diamond;
    }
}
