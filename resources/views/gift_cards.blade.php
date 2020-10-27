<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>inkbox Gift Cards</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <style>
   html {
    background: #f5f538;
    font-family: 'Roboto', sans-serif;
    -webkit-font-smoothing: antialiased;
    padding: 20px 0;
   }
    .maindiv {
    
    color: black;
    height:500px;
    width:30%;
    display: inline-block;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    
    margin: auto;
    
    
    border: 5px lightblue;
    background-color: white;
    text-align: center;
    
    border-radius: 10px;
    box-shadow: 0 6px 6px rgba(0,0,0,0.1);
    
    top: 0;
    transition: all .09s ease-in;
}
.maindiv:hover {
    top: -6px;
    box-shadow: 0 4px 5px rgba(0,0,0,0.2);
}
.header {
    font-family: "Antique olive";
}
input[type=text] {
  background-color: white;
  background-position: 50px 20px;
  background-repeat: no-repeat;
  padding-left: 40px;
}
  </style>

</head>

<body>

    <div class="maindiv">
        <div class="header">
            <br>
            <br>
                <h1>Submit Gift Card</h1>
        </div>

        <div class="giftcardform">
            <form class="searchbar" action="form_submit" method="POST">
                <label for="giftcardbarcode">Scan Barcode</label><br><br>
                <input type="text" id="giftcardbarcode" name="giftcardbarcode" placeholder="Barcode Number"><br><br>
                <label for="ordernumber">Order Number</label><br><br>
                <input type="text" id="" name="ordernumber" placeholder="Order Number"><br><br><br>

                <label for="price">Price of Gift Card</label>
                    <select id="price" name="price">
                        <option value="10">$10</option>
                        <option value="25">$25</option>
                        <option value="50">$50</option>
                        <option value="100">$100</option>
                    </select><br><br>
                <input type="submit" value="Submit">
            </form>
            
        </div>
    </div>



  <script src="js/scripts.js"></script>
</body>
</html>