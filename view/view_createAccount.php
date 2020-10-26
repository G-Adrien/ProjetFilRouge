<div class="container">
  <div class="row">
    
    <div class="col card-form-newAccount">
      <div class="border rounded p-3">
        <h5>Ouvrir un nouveau compte :</h5>
        <form action="createAccount.php" method="post">
          <div class="form-group">
            <label for="accountType">Type de compte :</label>
            <select class="form-control" id="accountType" name="accountType">
              <option value="Compte Courant">Compte Courant</option>
              <option value="Livret A">Livret A</option>
              <option value="PEL">PEL</option>
              <option value="PEA">PEA</option>
              <option value="PERP">PERP</option>
            </select>
          </div>
          <div class="form-group">
            <label for="amount">Montant à l'ouverture :</label>
            <small>(en Euro)</small>
            <br>
            <input type="number" name="amount" id="amount" min="50" value="50">
          </div>
          <div class="form-group ">
            <button type="submit" class="btn bgColorHoneyYellow openBtn">Ouvrir</button>
          </div>
        </form>
      </div>
    </div>

    <div class="col">
      <div class="border rounded p-3">
        <h5>Ouvrir un nouveau compte :</h5>
        <br>
        <h6>Type du nouveau compte :</h6>
        <p>
        
        <?php 
        echo $accountType
        ?>
        
        </p>
        <h6>Montant du nouveau compte :</h6>
        <p>

        <?php 
        echo $amount;
        ?>

        </p>
      </div>
    </div>




  </div>
  <!-- class row -->


</div> 
<!-- //class container -->