<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>






 <div class="container" style="max-width:600px">
    
    
    <table cellpadding="50" cellspacing="50">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('brand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
            </tr>
        </thead>
     
        <tbody>
                <tr>
                
                    <td><?= h($product->brand) ?></td>
                    <td><?= h($product->model) ?></td>
                    <td><?= $this->Number->format($product->size) ?></td>
                    <td><?= h($product->TYPE) ?></td>
                    <td><?= $this->Number->format($product->price) ?></td>
                </tr>
        </tbody>
    </table>
       
</div>
