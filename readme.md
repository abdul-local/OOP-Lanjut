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
