<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #E4DCCF;
      
    }
    body{
        background-color: #F9F5EB;
    }
    .kembali-button{
        display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: #EA5455;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
    }
    .kembali-button:hover {
            background-color: #E4DCCF;
    }
            </style>
  </head>
  <body>
  <a class="kembali-button" href="index.php">kembali</a>
    <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Harga Beli</label>
         <input type="text" name="harga_beli" required="" />
        </div>
        <div>
          <label>Harga Jual</label>
         <input type="text" name="harga_jual" required="" />
        </div>
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>