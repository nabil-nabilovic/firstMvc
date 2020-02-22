<html>
  
    <head>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" >
 
    $(function() {
    $("#AnnoProduzione" ).datepicker();
  } );
  </script>
  </head>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('Film/create'); ?>



<table>
    <tr><td>
            <label for="Titolo">Titolo</label></td>
        <td> <input type="text" name="Titolo"  />
        </td></tr>

    <tr><td>
            <label for="AnnoProduzione">AnnoProduzione</label></td>
        <td> 
            <input  type="text"  namr="AnnoProduzione" id="AnnoProduzione" />
            

        </td></tr>

    <tr><td>
            <label for="Nazionalita">Nazionalita</label></td>
        <td><input type="text" name="Nazionalita" />
        </td></tr>
    <tr><td>
            <label for="Regista">Regista</label></td>
        <td> <input type="text" name="Regista" />
        </td></tr>
    <tr><td>
            <label for="title">Genere</label></td>
        <td> <input type="text" name="Genere" />
        </td></tr>


    <tr><td></td><td>
            <input type="submit" name="submit" value="Create film" />

        </td></tr>
</table>
</form>

<html>