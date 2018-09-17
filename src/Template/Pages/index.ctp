<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */


?>
 <div class="container" style="max-width:600px">
    <h1 class="w3-large">Hae Pyörää merkillä</h1>

      

  

<div class="products index large-9 large-8 columns content">
    <?= $this->Form->create("", ['type'=>'get'])?>
        <?= $this->Form->control('keyword', ['default'=>$this->request->query('keyword')]); ?>
        <button>Etsi</button>
    <?= $this->Form->end()?>
    <table cellpadding="20" cellspacing="20">
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
                    <?= $this->Html->link(__('Tiedot'), ['action' => 'view', $product->id]) ?>
                </td>
                </tr>
           
            <?php endforeach; ?>
        </tbody>
    </div>
    </table>
       
</div>



<script>
 
</script>


