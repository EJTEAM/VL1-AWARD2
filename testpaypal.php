

<script
    src="https://www.paypal.com/sdk/js?client-id=AbrLwN9H-g9AhJcMRGmvwvqW4sd6SMPjYlgnkY5Pcjw7HerwdF3_CscS_Jao40aP-aHgrdonP6nRTowW"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script>


<div id="paypal-button-container"></div>

<script>

  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: 10
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
        //window.location.href="https://mpesa.ejsarl.com/newclient.php?prenom="+prenom+"&nom="+nom+"&montant="+montant+"&telephone="+telephone+"&nomsend="+nomsend+"&prenomsend="+prenomsend;
       
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>

