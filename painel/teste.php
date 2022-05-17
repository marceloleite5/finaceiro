<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<input type="date" id="txtSolicitacao">
<br>
<input type="date" id="txtTermino">

<script type="text/javascript">



    $('#txtSolicitacao')[0].valueAsDate = new Date();

    $('#txtSolicitacao').change(function() {
      var date = this.valueAsDate;
      date.setDate(date.getDate() + 3);
      $('#txtTermino')[0].valueAsDate = date;
    });

    $('#txtSolicitacao').change();
</script>
