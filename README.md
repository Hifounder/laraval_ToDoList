資料庫與後端 part1 @（5/23）
==
本次課程前，建議先自行實作過laravel的todo-list，要不然可能會聽的很吃力

主要內容會先介紹到基本的資料庫概念 到最後如何實作，主要使用laravel 的ORM進行操作，sql語法部分僅介紹，不深入討論

---

[Github - ToDoList範例](https://github.com/Hifounder/laraval_ToDoList)

Database
在建立資料表時，可以透過兩種方式建立：
1. 手動建立
    - 可以快速建立自己所需要的欄位
    - 適合個人開發使用
2. Laravel的Migration建立
    - 在團隊開發時，使用Local端開發的成員，可以馬上擁有跟目前最新版本的資料庫欄位
    - 養成良好習慣，後續回來繼續開發網站時，比較不會有忘記有哪些欄位

關於在Laravel撈取資料庫的資料可以透過以下兩種方式：
1. 透過Query Builder撈取，範例：
    DB::table('users')->get();
    - 優點：不需要建立Model，即可撈取資料庫的資料
2. 透過ORM撈取，範例：
    YourModel::where('column_name','value')->get();
    - 優點：資料取得後，資料會以Collection方式操縱資料。如：將可以使用其提供的關聯(Relationships)，來快速取得其他資料表的相關資料！

---
使用範例檔請按照以下步驟補齊其他東西
1. 新增一個新的env,然後連上你的資料庫
2. 跑composer install
3. 跑php artisan key:gen
4. 跑php artisan migrate
5. 跑php artisan serve (開啟本地模擬伺服器)

---

請使用現有的Todo-List加上類別的功能，並建立一對多之關聯
類別需有以下欄位
* id(流水號)
* type_name(類別名稱)
* sort(權重)

新增類別 日常生活,課程作業,其他,...(自行發揮)

在原先的資料表中加上關聯的外來鍵 - foreign key

---
這時候你的資料庫欄位應該如下

類別
* id(流水號)
* type_name(類別名稱)
* sort(權重)

任務
* id(流水號)
* type_id(類別的外來鍵)
* task_name(任務名稱)
* sort(權重)

---
