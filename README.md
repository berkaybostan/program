# Program
Kocaeli university open source lab yii2 program module

C:\xampp\htdocs\app\vendor\kouosl\program\migrations dizininde yer alan dosyanın içeriğinde modüle ait program isimli tablo oluşturuldu.

```
php yii migrate --migrationPath=@vendor/kouosl/program/migrations --interactive=0
```

C:\xampp\htdocs\app dizini içerisindeki composer dosyasına aşağıdaki direktifleri ekliyoruz.

```
    {
        "type": "vcs",
        "url": "https://github.com/berkaybostan/program.git"
    }

    "kouosl/program": "dev-master"
```

C:\xampp\htdocs\app\backend\config 

C:\xampp\htdocs\app\frontend\config dizinleri içerisindeki main.php dosyasına aşağıdaki direktifleri ekliyoruz.

```
    'program' => [
        'class' => 'kouosl\program\Module'   // here is our v1 modules
    ],
```

Aşağıdaki bağlantılardan uygulamaya erişilebilir.

* frontend: http://kouosl-app.dev/program
* backend: http://kouosl-app.dev/admin/program

Uygulamanın backend tarafı:

http://kouosl-app.dev/admin/program/programs/create bağlantısı ile ders programı oluşturulabiliyor.

http://kouosl-app.dev/admin/program/programs bağlantısında eklenen dersleri ekranda görüntüleyebiliyor, silme ve güncelleme işlemlerini yapabiliyoruz.

Uygulamanın frontend tarafı:

http://kouosl-app.dev/program/programs bağlantısı ile ders programını görüntüleyebiliyoruz.

