<?php ?>
<script>
var app = angular.module('profileApp', []);

app.controller('cluster1', function($scope, $http) {

	//initializer
    angular.element(document).ready(function () {
    });

    $scope.conf = {
        base: "<?=base_url();?>",
        base_url: function(url){
            return this.base + url;
        }
    };

    //cluster 1
    $scope.cvSection= {
        cvData: <?=json_encode($oldCv);?>,
        displayImage: 0,

        getId: function() {
            return this.cvData[this.displayImage].id;
        },

        getCvData: function() {
            return $scope.conf.base_url(this.cvData[this.displayImage].link);
        },

        swapImage: function(idx) {
            this.displayImage= idx;
        },
    };

    $scope.test= function() {
        console.log("ALIVE");
        alert("ALIVE");
    }
    
    //list of all cvs
    //display primary sign on permenant cv
    //click any cv to make it active
   
    //add latest cv which will replace primary cv
    //edit cv will replace active cv
    //delete, download and print will work on active cv

    $scope.api= function (url, data, callback) {
        var request = $http({
            method: "post", 
            url: $scope.conf.base+url,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            data: data,
        });

        request.success(function (data) {
            //$scope.console= JSON.stringify(data);
            if(data.err)
                console.log("Error: " + data.err);
            if(data.redirect)
                window.location.href= data.redirect;
            if(data.notification)
                $scope.flash(data.notification);
            if(data.alert)
                alert(data.alert);
        });
    }

    $scope.flash= function(msg){
        console.log(msg);
    }

    $scope.printContent= function(el){
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
    }
});
</script>