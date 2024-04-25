$(document).ready(function(){
    $("input[id=file1]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename1]").after(img);
            $(img).attr('class', 'photo');
        }
    });
    /* $("input[id=file2]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename2]").after(img);
            $(img).attr('class', 'photo');
        }
    });
      $("input[id=file3]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename3]").after(img);
            $(img).attr('class', 'photo');
        }
    });
       $("input[id=file4]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename4]").after(img);
            $(img).attr('class', 'photo');
        }
    });
        $("input[id=file5]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename5]").after(img);
            $(img).attr('class', 'photo');
        }
    });
         $("input[id=file6]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename6]").after(img);
            $(img).attr('class', 'photo');
        }
    });
          $("input[id=file7]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename7]").after(img);
            $(img).attr('class', 'photo');
        }
    });
           $("input[id=file8]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename8]").after(img);
            $(img).attr('class', 'photo');
        }
    });
            $("input[id=file9]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename9]").after(img);
            $(img).attr('class', 'photo');
        }
    });
             $("input[id=file10]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename10]").after(img);
            $(img).attr('class', 'photo');
        }
    });
              $("input[id=file11]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename11]").after(img);
            $(img).attr('class', 'photo');
        }
    });
               $("input[id=file12]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename12]").after(img);
            $(img).attr('class', 'photo');
        }
    });
                $("input[id=file13]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename13]").after(img);
            $(img).attr('class', 'photo');
        }
    });
        $("input[id=file14]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename14]").after(img);
            $(img).attr('class', 'photo');
        }
    });
     $("input[id=file15]").change(function(e){
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            
            var file = e.originalEvent.srcElement.files[i];
            
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                 img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $("input[id=filename15]").after(img);
            $(img).attr('class', 'photo');
        }
    });*/
});