<?php
class AnagramGenerator {
    public static function generateAnagram($word) {
        // Same implementation as before
    }

    private static function permute($characters) {
        // Same implementation as before
    }
}

// Check if the word is provided in the URL
if (isset($_GET['word'])) {
    $word = $_GET['word'];
    $anagrams = AnagramGenerator::generateAnagram($word);

    echo "Anagrams of \"$word\":<br>";
    foreach ($anagrams as $anagram) {
        echo implode("", $anagram) . "<br>";
    }
}
?>
