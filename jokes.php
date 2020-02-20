<?php include 'includes/header.php'; ?>

<h1>Here are some jokes I like</h1>

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

    <?php if ($jokes ?? []) : ?>
        <?php foreach ($jokes as $joke) : ?>


            <div class="joke">
                <p><strong><?= $joke['question']; ?></strong></p>
                <p><?= $joke['answer']; ?></p>
            </div>


        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>