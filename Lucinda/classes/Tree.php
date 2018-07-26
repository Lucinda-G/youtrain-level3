<style>

    .file{
        list-style-image: url(classes/file.png);
    }
    
    .folder{
        list-style-image: url(classes/folder.png);
    }


</style>

<script>

    $(document).ready(function(){
        //hide any unordered list in an unordered list (hide nested lists)
        $('ul ul').hide();
        
        //listen for user clicking on a folder item. The > makes sure the <a> is a direct decendant
        $('.folder > a').click(function(event){
            //stop browser doing what it is programmed to do by default
            event.preventDefault();
            //find the next level list
            var list = $(this).parent().find('>ul');
            list.fadeToggle();
        });
    });

</script>


<?php

class Tree{
    
    //contructor function - will run automatically
    function __construct($dir=''){
        
        if($dir == ''){
            echo 'Problem; we need a directory.';
        }else{
            $this->listFilesInFolders($dir); //passing it as $dir was only in the construct bit
        }
    }
    
    //create a private method of the class - can only be called from within the class itself
    private function listFilesInFolders($dir){
        //create array which stores all items in $dir
        $items = scandir($dir);
        //var_dump($items);
        echo '<ul>';
        //loop through each item in $items
        foreach($items as $item){
            
            //prepare a css class for styling
            $cssClass = 'file';
            if(is_dir($dir.'/'.$item)){
                $cssClass = 'folder';
            }
            
            
            //ignore files with a . in the name
            if($item[0]!='.'){ // [0] means first character
                //make each item a link to where it is
                echo '<li class="'.$cssClass.'"><a href="'. $dir .'/'. $item .'">' . $item . '</a>'; //</li>
                
                //if the current path is a directory
                if(is_dir($dir.'/'.$item)){
                    $this->listFilesInFolders($dir.'/'.$item); //calls itself
                }
                echo '</li>';
            } 
        }
        echo '</ul>';
    }
    
    
    
    
}


?>