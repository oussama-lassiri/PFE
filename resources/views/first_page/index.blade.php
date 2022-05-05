@extends('nav')
@section('style')
<link rel="stylesheet" href="css\first_page\style.css">
<title>Première page</title>
@endsection
@section('content')
<div class="container">
    <h1 align="center">Les types de structures que nous proposons</h1>
    <h3 align="center">s'il vous plaît, pouvez-vous choisir:</h3>
    <div class="quotes">
        <div class="card">
            <div class="box box1 animate__animated animate__bounceInLeft">
                <p >Immobilier</p>
                <div class="explique">(Maisson, Villa, Appartement)</div>
                <button class="noselect" onclick="toggleText(1)"></button>
            </div>
        <div class="bg"></div>
    </div>
    <div class="card">
        <div class="box box2 animate__animated animate__bounceInDown">
            <p class="terrainp">Terrain</p>
            <div class="explique" style="left: 90px;">(Terrains Et Fermes)</div>
            <button class="noselect" onclick="toggleText(2)"></button>
        </div>
        <div class="bg"></div>
    </div>
    <div class="card">
        <div class="box box3 animate__animated animate__bounceInRight">
            <p  class="service">Service</p>
            <div class="explique">(Bureaux, Plateaux, Magasins)</div>
            <button class="noselect" onclick="toggleText(3)"></button>
        </div>
        <div class="bg"></div>
        </div>
    </div>  
    <div id="Agricole_btn" style="display: none;">
        <a href="second_page/terrain_ferme?category=terrain"><input type="submit" class="btn-grad animate__animated animate__backInUp" name="terrains" value="Terrains"></a>
        <a href="second_page/terrain_ferme?category=ferme"><input type="submit" class="btn-grad animate__animated animate__backInUp" name="fermes" value="Fermes"></a> 
      </div>
    <div id="Immeuble_btn" style="display: none;">
        <a href="second_page/maisson_villa?category=maisson"><input type="submit" class="btn-grad animate__animated animate__backInUp" name="maisson" value="Maisson"></a>
        <a href="second_page/appartement"><input type="submit" class="btn-grad animate__animated animate__backInUp" name="appartement" value="Appartement"></a>
        <a href="second_page/maisson_villa?category=villa"><input type="submit" class="btn-grad animate__animated animate__backInUp" name="villa" value="Villa">
   </a> </div>
    <div id="Industrie_btn" style="display: none;">
        <a href="second_page/magasin?category=bureaux"><input type="submit" class="btn-grad animate__animated animate__backInUp" name="bureaux" value="Bureaux"></a>
        <a href="second_page/magasin?category=plateaux"><input type="submit" class="btn-grad animate__animated animate__backInUp" name="plateaux" value="Plateaux"></a>
        <a href="second_page/magasin?category=magasin"><input type="submit" class="btn-grad animate__animated animate__backInUp" name="magasins" value="Magasins"></a>
    </div>
</div>
  <script>
  function toggleText(id){
    var x = document.getElementById("Immeuble_btn");
    var y = document.getElementById("Agricole_btn");
    var z = document.getElementById("Industrie_btn");
    if(id === 1){
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    y.style.display = "none";
    z.style.display = "none";
    $("#Immeuble_btn").hide(); 
    $("#Immeuble_btn").show();
    }
    if(id === 2){
      if (y.style.display === "none") {
        y.style.display = "block";
      } else {
        y.style.display = "none";
      }
    x.style.display = "none";
    z.style.display = "none";
    $("#Agricole_btn").hide(); 
    $("#Agricole_btn").show();}
    if(id === 3){
      if (z.style.display === "none") {
        z.style.display = "block";
      } else {
        z.style.display = "none";
      }
    y.style.display = "none";
    x.style.display = "none";
    $("#Industrie_btn").hide(); 
    $("#Industrie_btn").show();}
  }
  </script>
  @endsection