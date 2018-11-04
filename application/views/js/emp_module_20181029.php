<?php ?>
<script>
var app = angular.module('profileApp', []);

app.controller('cluster1', function($scope, $http) {

  //initializer
  angular.element(document).ready(function () {
  });

  $scope.$watch('$viewContentLoaded', function() {
    $scope.offerSection.chkOfferData();
  });

  $scope.conf = {
    base: "<?=base_url();?>",
    base_url: function(url=""){
      return this.base + url;
    },
    range: function(num) {
      return new Array(num);
    },
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

  $scope.offerSection= {
    offerData: <?=json_encode($oldOffer);?>,
    chkOfferData: function(){
      if(this.offerData.length <3) {
        for(i=0; i<(3-this.offerData.length); i++)
          this.offerData.push({"id":-1, "user_id":<?=$id;?>, "description":"NA", "status": "Pending", "additional":"NA", "notes":"...notes"});
      }
    },
    currentEdit:{
      content: "NA",
      id: null,
    },
    get: function(idx) {
      return this.offerData[idx];
    },
    writeOfferData: function(idx){
      $scope.api("Employee_reg/saveOfferHistory", this.offerData[idx], function(res){
        console.log(res.data);
      });
    },
  }

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

  $scope.getFormData= function (object) {
    const formData = new FormData();
    Object.keys(object).forEach(key => formData.append(key, object[key]));
    return formData;
  }
  $scope.api= function (url, data, callback) {
    console.log(data);
    var request = $http({
      method: "post",
      url: $scope.conf.base + url,
      headers: { 'Content-Type': 'application/json' },
      data: data,
    });
    request.then(function (response) {
      //$scope.console= JSON.stringify(response.data);
      if(response.data.err)
      console.log("Error: " + response.data.err);
      if(response.data.redirect)
      window.location.href= response.data.redirect;
      if(response.data.notification)
      $scope.flash(response.data.notification);
      if(response.data.alert)
      alert(response.data.alert);
      callback(response);
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
