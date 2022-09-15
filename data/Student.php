<?php

class Student {
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    /**
     * Set the value of sample
     *
     * @param string $sample
     *
     * @return self
     */
    public function setSample(string $sample): self
    {
        $this->sample = $sample;

        return $this;
    }

    /*
     * __clone() Function
        ● Kadang menyalin semua properties bukanlah yang kita inginkan
        ● Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
        ● Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class
        nya dengan nama function __clone()
        ● Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
        ● Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
     */
    public function __clone()
    {
        // ..misal kita ingin data sample tidak diclone
        unset($this->sample);
    }

    /* Satu
    * __toString() Function **
        ● __toString() function merupakan salah satu magic function yang digunakan sebagai representasi
        string sebuah object
        ● Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
    */
    public function __toString(): string
    {
        return "Student id: $this->id, name: $this->name, value: $this->value";
    }

    /*
    * __invoke() Function **
        ● __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai
        function
        ● Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis
        function __invoke() yang akan dieksekusi
    */
    public function __invoke(...$arguments)
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join". PHP_EOL;
    }

    /* tiga
    * __debugInfo() Function
        ● Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
        ● Function var_dump() sebenarnya memanggil function __debugInfo()
        ● Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
        * ini seperti mengoveride var dump
    */
    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "value" => $this->sample,
            "author" => "Kriti Mauludin",
            "version" => "1.0.0"
        ];
    }
}