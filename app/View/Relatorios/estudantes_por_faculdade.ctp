<div class="container_12">
    <div class="grid_8">
        <div class="block-border" id="tab-graph">
            <div class="block-header">
                <h1>Estudantes por faculdade</h1>
            </div>
            <div class="block-content tab-container">
                <table id="graph-data" class="graph">
                    <caption>Estudantes Por faculdade</caption>
                    <thead>
                    <tr>
                        <td></td>
                        <?php foreach ($estudantes_faculdade as $ef) {
                            echo "<th>{$ef['Faculdade']['name']}</th>";
                        }
                        ?>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                            $total = 0;
                            foreach ($estudantes_faculdade as $ef) {
                                echo "<td>{$ef[0]['total']}</th>";
                                $total = $total + $ef[0]['total'];
                            }
                        ?>
                    </tr>
                    </tbody>
                </table>


                <div id="tab-bar" class="tab-content"></div>


            </div>
        </div>
    </div>
    <div class="grid_4">
        <div class="block-border">
            <div class="block-header">
                <h1>Tabela</h1><span></span>
            </div>
            <div class="block-content">
                <table id="table-example" class="table">
                    <thead>
                    <tr>
                        <th>Faculdade</th>
                        <th>Estudantes</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($estudantes_faculdade as $ef) {
                        echo "<tr>";
                        echo "<td>{$ef['Faculdade']['name']}</td>";
                        echo "<td>{$ef[0]['total']}</th>";
                        echo "</tr>";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="grid_12">
        <h1>Total</h1>
        <p><?php echo $total . "  estudantes"; ?></p>
    </div>

</div>


<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
/*
* Tabs
*/

$('#graph-data').visualize({type: 'bar', height: 250}).appendTo('#tab-bar').trigger('visualizeRefresh');
<?php $this->Html->scriptEnd(); ?>
		