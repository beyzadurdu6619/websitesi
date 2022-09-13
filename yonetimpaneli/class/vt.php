<?php
class VT{
    var $sunucu="localhost";
    var $user="root";
    var $parola="";
    var $dbname="yonetimpaneli";
    var $baglanti;

    
    function __construct()
    { 
      try{
      $this->baglanti=new PDO("mysql:host=".$this->sunucu.";dbname=".$this->dbname.";charset=utf8",$this->user,$this->parola);
    
      }
      catch(PDOException $error){
        echo $error->getMessage();
        exit();
    }
    }
    /*SELECT * FROM ayarlar WHERE ID=1 ORDER BY ASC LIMIT 1*/
    public function verigetir($tablo,$wherealanlar="",$wherearraydeger="",$orderby="ORDER BY ID ASC",$limit="")
    {
      $this->baglanti->query("SET CHARACTER SET utf8");
      $sql="SELECT * FROM ".$tablo;
      if(!empty($wherealanlar) && !empty($wherearraydeger))
      {
        $sql.=" ".$wherealanlar;
        
        if(!empty($orderby))
        {
          $sql.=" ".$orderby;
        }
        if(!empty($limit))
        {
          $sql.=" LIMIT ".$limit;
        }
        $calistir=$this->baglanti->prepare($sql);
        $sonuc=$calistir->execute($wherearraydeger);
        $veri=$calistir->fetchAll(PDO::FETCH_ASSOC);
      }
      else
      {
        if(!empty($orderby)){$sql.=" ".$orderby;}
        if(!empty($limit)){$sql.=" LIMIT ".$limit;}
        $veri=$this->baglanti->query($sql,PDO::FETCH_ASSOC);

      }
      if($veri !=false && !empty($veri))
      {
        $datalar=array();
        foreach($veri as $bilgiler)
        {
          $datalar[]=$bilgiler;
        }
        return $datalar;
      }
      else{
        return false;
      }
    }

    public function sorgu($tablo,$alanlar="",$degerlerarray="",$limit="")
    {
      $this->baglanti->query("SET CHARACTER SET utf8");
      
      if(!empty($alanlar) && !empty($degerlerarray))
      {

        $sql=$tablo." ".$alanlar;
        if(!empty($limit))
        {$sql.=" LIMIT ".$limit;}
        $calistir=$this->baglanti->prepare($sql);
        $sonuc=$calistir->execute($degerlerarray); 
      }
      else
      {
        $sql=$tablo;
        if(!empty($limit))
        {$sql.=" LIMIT ".$limit;}
        $sonuc=$this->baglanti->exec($sql);
        if($sonuc !=false)
        {
          return true;
        }
        else
        {
          return false;
        }
        $this->baglanti->query("set character set utf8");


      }
    }
      public function sekle()
      {
        
        $lisansno=$_GET["lisansno"];
        $sirketkodu=$_GET["sirketkodu"];
        $sirketadi=$_GET["sirketadi"];
        $sirketekle=this->sorgu("INSERT INTO sirketbilgileri","SET lisansno=?, sirketkodu=?, sirketadi=?",array($lisansno,$sirketkodu,$sirketadi));
        if($sirketekle != false)
        {
          return true;
        }
        else 
        {
          return false;
        }
        

      }  
      

    }

    


  

    



    

?>