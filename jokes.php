<?php include 'includes/header.php'; ?>

<h1>Random Cat Joke Generator</h1>

<div class="jokes">
    <?php
    $jokes = [
        [
            'question' => 'What do you call a cat that likes to swim?',
            'answer' => 'A Cat Fish',
        ],
        [
            'question' => 'What do you call a cat with two heads?',
            'answer' => 'A Mew-tant',
        ],
        [
            'question' => 'What happened to the cat that ate a glove?',
            'answer' => 'It had mittens',
        ],
        [
            'question' => 'What is a cats favourite TV show?',
            'answer' => 'The evening mews',
        ],
        [
            'question' => 'What cat has eight legs?',
            'answer' => 'An octo-puss',
        ],
        [
            'question' => 'What is a kittens favourite lesson?',
            'answer' => 'Mew-sic',
        ],
    ];
    ?>

    <a href="/jokes" class="button button--pink">Make 🐱 Joke</a>

    <?php if ($jokes ?? []) : ?>
        <?php
        $jokesCount = count($jokes);
        $randomNumber = rand(0, $jokesCount - 1);
        ?>

        <div class="joke">
            <p><strong><?= $jokes[$randomNumber]['question']; ?></strong></p>
            <p><?= $jokes[$randomNumber]['answer']; ?></p>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>