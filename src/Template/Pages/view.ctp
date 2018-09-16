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
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
            </tr>
        </thead>
     
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= h($product->id) ?></td>
                    <td><?= h($product->brand) ?></td>
                    <td><?= h($product->model) ?></td>
                    <td><?= $this->Number->format($product->price) ?></td>
                    <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'viewproduct', $product->id]) ?>
                </td>
                </tr>
           
            <?php endforeach; ?>
        </tbody>
    </table>
       
</div>


