
<header class="header" >
  <figure class="logotipo">
    <div class="parent">
      <div class="div1">
        <a href="/">
          <img src="images/logo.jpeg" alt="" width="70">
        </a>
      </div>
      <div class="div2">
        Merger Group
      </div>
    </div>
  </figure>

  <input type="checkbox" id="btn-menu">
  <label for="btn-menu"> <img src="img/menu.png" alt=""> </label>

  <nav class="menu font-montserrat" style="
  margin-right: 2%; ">
      <ul class="menu2">

          <li>
              <a href="/">HOME</a>
          </li>
          <li class="no-responsive">
              <p>|</p>
          </li>
          <li>
              <a href="/#nosotros">NOSOTROS</a>
          </li>
          <li class="si-responsive">
              <input type="checkbox" id="btn-close" onclick="cambiar()">
              <label for="btn-close"> <img src="img/cancel3.png" alt=""> </label>
          </li>
      </ul>
  </nav>
</header>




<script>
    function cambiar() {
        if (document.getElementById("btn-close").checked == true) {
            document.getElementById("btn-menu").checked = false;
            document.getElementById("btn-close").checked = false;

        }
    }
</script>

<?php include("barrasocial.php"); ?>


<div style="
    height: 69px;
">

</div>


<style>
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: #808080;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media screen and (max-width: 600px) {
        .dropdown-content {
            position: static;
            box-shadow: none;
        }
    }

    .parent {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }

    .div1 { grid-area: 1 / 1 / 2 / 2; }
    .div2 { grid-area: 1 / 2 / 2 / 3;

      width: 135px;
      height: 64px;
      left: 113px;
      top: 17px;

      font-family: Montserrat;
      font-style: normal;
      font-weight: 500;
      font-size: 25px;
      line-height: 30px;
      display: flex;
      align-items: center;
      text-align: center;
      letter-spacing: -0.015em;
      color: #18A0FB;

    }
</style>
