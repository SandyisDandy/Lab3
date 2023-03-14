<h2>SOULS COLLECTED</h2>
<a href="guest/create">CREATE GUEST</a>
</div>
<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

       

           <h3> <?= esc($guest_item['name']) ?> </h3>
            <p><?= esc($guest_item['email']) ?> 
            <p> <?= esc($guest_item['comment']) ?>

        
    <?php endforeach ?>

<?php else: ?>

    <h3>No Souls</h3>

    <p>Unable to find any souls for you.</p>

<?php endif ?>