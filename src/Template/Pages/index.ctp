<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */


?>
 <div class="container" style="max-width:600px">
    <h1 class="w3-large">Hae Pyörää merkillä</h1>
    
    <table cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('Merkki') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Malli') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Hinta') ?></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    
                    <td><?= h($product->brand) ?></td>
                    <td><?= h($product->model) ?></td>
                    <td><?= h($product->price) ?>€</td>
                    <td class="actions">
                    <?= $this->Html->link(__('Näytä tiedot'), ['action' => 'view', $product->id]) ?>
                </td>
                </tr>
           
            <?php endforeach; ?>
        </tbody>
    </table>
       
</div>


