<h2 style="color: #088000">Результат:</h2>
<ul style="color: #088000">
<?php foreach($messages as $message): ?>
    <li><?=$message?></li>
<?php endforeach; ?>
</ul>

<?=date('L',$enteredYearTimestamp)?>