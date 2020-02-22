<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>


    <body>
        <table>
            <th style="background-color: #129FEA">CodFilm</th>
            <th style="background-color: #129FEA">Nazionalita</th>
            <th style="background-color: #129FEA">Regista</th>
            <th style="background-color: #129FEA">Genere</th>
            <th style="background-color: #129FEA">Titolo</th>
            <th style="background-color: #129FEA">AnnoProduzione</th>
            <th style="background-color: #129FEA">Action</th>
                <?php
                echo "film home page";
                $this->load->helper('url');
                ?>
            <a href="<?php echo site_url('Welcome/getView') ?>">Link</a></br>

            AddFilm    <a href="<?php echo site_url('Film/create') ?>">Add New Film</a>

            <?php
            $this->load->model('FirstModel');
            foreach ($film as $value) {
                echo '<tr><td>' . $value['CodFilm'] . '</td>';
                echo '<td>' . $value['Nazionalita'] . '</td>';
                echo '<td>' . $value['Regista'] . '</td>';
                echo '<td>' . $value['Genere'] . '</td>';
                echo '<td>' . $value['Titolo'] . '</td>';
                echo '<td>' . $value['AnnoProduzione'] . '</td>';
                echo '<td><a href="' . site_url('Welcome/getView') . '">edit</a> <td><a href="' . site_url('Welcome/getView') . '">delete</a></td></tr>';
            }
            ?>
        </table>
    </body>
</html>
