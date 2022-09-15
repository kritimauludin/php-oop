<?php

/**
 * Encapsulation
 * Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
 * Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
 * Untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier private, sehingga tidak bisa diakses atau diubah dari luar
 * Agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties tersebut
 */

 /**
  * Getter dan Setter
  * Di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan Getter dan Setter method.
  * Getter adalah function yang dibuat untuk mengambil data field
  * Setter ada function untuk mengubah data field
  */

  //dengan setter dan gettr kita bisa membuat validasi, karena jika properti yg diset public maka akan sulit memvalidasinya
  //karena pengguna akan bisa merubah seenaknya

  class Category {
    private string $name;
    private bool $expensive;

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {       
      if(trim($name) != ""){
        $this->name = $name;
      }
    }

    /**
     * Get the value of expensive
     *
     * @return bool
     */
    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    /**
     * Set the value of expensive
     *
     * @param bool $expensive
     *
     * @return self
     */
    public function setExpensive(bool $expensive): self
    {
        $this->expensive = $expensive;

        return $this;
    }
  }