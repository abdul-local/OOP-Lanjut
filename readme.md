# modifier public
1. dengan modifier public bisa kita akses walaupun di luar class

# modifier protected 
1. ini bisa di akses dengan subclass nya 
# modfier private 
1. ini hanya bisa di akses di kelas itu sendiri

# untuk membuat constan pada php apasih printah yg di gunakan
1. kita dapat mendeklarasikanya dengan const
2. untuk merujuk ke konsta kita dapat menggunakan self

# inheretence itu seperti pewarisan kelas ini 
1. digunakan untuk penulisan code yang sama tidak perlu di tuli lagi

# ada Namanya lagi N-Inheretence itu pawarisan subclass lagi di pecah jadi sublass lagi
1. conthoh kita buat class utama dengan nama kelas1 , subclassnya dengan nama kelas2 , nah di class dua itu lagi kita buat subclass dengan
nama misal kelas3 nah dari kelas2 dan kelas3 itu yang dinamakan dengan N-Inheretence
# Override Method
1. Override terjadi dengan syrat nama method di class utama dengan subclass sama.dimana output yang di hasilkan yaitu output override
atau output yang di timpa.
# catatan bila kita menggunakan parent berarti kita akan memanggil class dari sebelumnya

# interface salah satu aturan yang dibuat yang dibuat dimana harus diimplentasikan
1. dimana pada sebuah class harus di implementasikan aturan yang sudah di buat
2. untuk Multi Implementasi interface pada class di PHP kita dapat menambahakn interace lagi dan untuk class tingal kita berikan koma saja.


# Abstract class
1. dimana abstract class ini akan menyebabkan error apabila kita inherentence karena sudah ke tentuan
# Implentasi Abscract dan Interface pada suatu class

# Static Method dan Properties 
1. Dimana ini ketika menggunkan static maka untuk akses tidak perlu di buatkan instance langsung menggunakan ::
2. jika varibelnya juga static maka untuk mengakses dapat menggunakan self:: 
3. 

# Accesor Method
1. Dimana menggunkan method getter dan setter, getter dimulai dengan get lalu diikuti dengan huruf kapital
2. setter dimulai dengan set lalu diikuti dengan huruf kapital

# Magic Method 
1. __set() dan __get()
2. ketika kamu ekskusi kode sebelumnya PHP segera mengenali bahwa tidak ada properti bernama name atau rol di kelas, karena property tsb tidak ada maka method set di panggil

# Magic Method __call()
1. kita bisa buatkan sebuah methodnya dengan function __call($method, $qrguments)
 2. pada saat kita instance dan kemudian kita akese sesui keinginan kita maka kita akan mengakses methodnya dan untuk di dalam kurung itu nilai dari argumentnya
# Method Chaining 
1. method ini sering di pakai dan juga mempermudah pengambilan data yang nantinya
2. 

# Namespace
1. ruang nama, biasa di pakai dipakai di framework
2. kita bisa menyingkat panggilan dengan menggunakan use
3. bila terlalu panjang dapat menggunakan Namespace Alias yang sering simbol yang dipakai as
4. 
# Autoloading 
1. di sini saratnya harus nama class sama dengan nama pathnya
2. kita akan menggunakan fungsi spl_autholod_register(),
3. Autoload class di Folder Lain, saja dengan autholoading

# Menggunakan Composer
1. bisa lakukan penginstalla di leptop dengan mengunjungi link https://getcomposer.org/download/
2. lalu pasang library monolog dengan perintah composr monolog/monolog

# Mengecek Eksistensi Method dan Property
1. method_exists() dan property_exists(). mengecek apakah method dan property tersedia di dalam class
2. method_exists ( mixed $object , string $method_name ) : bool
3. parameter pertama objectnya dan paramter yang kedua nama methodnya

# Mengecek Exitasi class
1. bisa menggunakan fungsi class_exists
2. paramter pertama class_name  dam parameter kedua autoload
3. 
# mengcek Nama dan Tipe Class
1. untuk mengetahui nama atau tipe class kita bisa menggunakan fungsi get_class atau is_a()
2. penggunaannya get_class ([ object $object ] ) : string
3. is_a() digunakan untuk memeriksa jenis class
4. is_a ( mixed $object , string $class_name [, bool $allow_string = FALSE ] ) : bool
5. paramter pertama object , paramter kedua class_name dan allow_string.

# Mengclone Object
1. salinan suatu object. kata kuci yg digunakan yaitu clone
2. $objCloned = clone $objTarget;

# Mengubah Array Menjadi Object
1. kita menggunakan json_encode untuk mengkonversi array ke json string
2. json_decode: digunakan untuk mengkonversi json string ke object

# Mengnal Startefy Pattern
1. untuk kasus materi ini bisa kita selesaikan dalam membuat sebuah notifikasi emal
2. dimana kita membuat sebuah interfac dengan nama Notifier, dan 3 buah class yang mewajibkan mengimplementasikan interfac tersebut
3. 
# Mengenali Factory Pattern
1. Fatory disini digunakan untuk membuat sebuah fabrik yang di khususkan menjalan sebuah fungsi yg di inginkan.
2. konsepnya seperti pabrik
3. 
# Abstract Factory 
1. sama saja sama Factory 

# Mengenal Adapter Pattern
1. Kali ini kita akan melihat bagaimana sebuah adapter pattern dapat membantu kamu untuk menangani berbagai objek yang memerlukan sebuah method untuk menangani kasus general. Walaupun secara atribut class - class tersebut berbeda. Namun dengan adapter pattern ini, kita dapat menggunakan apa saja class-nya selama memenuhi syarat yang dibutuhkan oleh class adapter.

# Mengenal Singleton Pattern
1. ini bisa menyelsaikan masalah instansiasi
2. dengan mengguanakan singleton maka code yang kita buat lebih sedikit

# Mengenal Iterator Pattrn
1. Iterator adalah salah satu bahasan yang menarik dalam dunia design pattern. Kalau kita terjemahkan ke bahasa Indonesia Iterator/Iteration adalah Iterasi atau pengulangan.
 
 # Mengenal Obsrver Pattern
 1. digunakan untuk memecahkan instansiasi
 2. 

 # Mengenal pattern Proxy Pattern

 # Mengenal decorator Pattern

# Mengenal Active Record Pattern 
1. langkah pertama install composer
2. passang gabordemooij dengan melakukan printah composer require gabordemoij/redbean
3. buat databae di mysql