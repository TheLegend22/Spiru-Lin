<?php 
    if(isset($_POST['submit'])){
        $loc = $_POST['loc'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        
        $stmt = $con->prepare("INSERT INTO customers(name,phone,loc,date)  VALUES(:n,:p,:l,now())");
        
        $stmt->execute(array(
            'n' => $name,
            'p' => $phone,
            'l' => $loc
        ));
    }

?>

<div class='block14'>
    <div class='main-form' id='order'>
        <div class='form-right'>
            <div class='ttl'>ماسك Spirulina لنمو الشعر</div>
            <p>علاج سريع لاستعادة بنية الشعر مع تركيبة لإطالة الشعر والعناية بفروة الرأس وبصيلات الشعر!s</p>
        </div>
        <form action='<?php echo $_SERVER['PHP_SELF']?>' class='form' method="POST">
            <input class='loc' name='loc' type="text" placeholder='الوقت المناسب للاتصال'>
            <input class='name' name='name' type="text" placeholder='الاسم بالكامل' minlength="4" accept-charset="utf-8" required>
            <input class='phone' name='phone' type="text" placeholder='رقم الهاتف' minlength="4" accept-charset="utf-8" required>
            <input name='submit' type='submit' value="اطلبية الان" class='order-btn'>
        </form>
        <div class='clear'></div>
        <div class='desc'>
            المنتج معتمد، ويتم إدراج المكونات والتعليمات وطريقة الاستعمال على الملصق. الدفع مستحق عند الاستلام (نقدًا عند الاستلام).
        </div>
    </div>
</div>