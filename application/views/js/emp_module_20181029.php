<?php ?>
<script>
var app = angular.module('profileApp', []);

app.controller('cluster1', function($scope, $http) {

  function loader () {
    $scope.offerSection.loadDataAll();
    $scope.personalSeciton.loadDataAll()
  };

  $scope.conf = {
    base: "<?=base_url();?>",
    user_id: <?=$id;?>,
    base_url: function(url=""){
      return this.base + url;
    },
    range: function(num) {
      return new Array(num);
    },
  };

  $scope.basicSection= {
    model: {
        fname: "NA", lname: "NA", mid_name: "NA",
        contact: "NA", phone: "NA",
        email: "NA", emailOther: "NA",
        notes: "NA",
    },
    loadDataAll: function() {
      this.model= <?=json_encode($emp);?> ;  //use api or direct bind with php
    },
  }
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

  $scope.personalSeciton= {
      model: {
        basic: {
          initials: "NA", cnic_no: "NA", gender: "NA", marital_status: "NA", dependance: "NA",
          address: "NA", homeAddress: "NA", citizenship: "NA",
          nativeLanguage: "NA", otherLanguage: "NA",
          hobies: "NA",
          socialCapital: "NA",
          uniqueAboutCandidate: "NA", uniqueDescription: "NA",
        },
        //education, awards, project, skills, workExperience, references
      },
      loadDataAll: function() {
        this.model.basic= <?=json_encode($details);?> ;  //use api or direct bind with php
      },
      saveBasic: function() {
        $scope.resource("Employee_reg/detailsCRUD", "add", this.model.basic, function(res){
          console.log(res.data);
        });
      },
  }
  $scope.offerSection= {
    offerData: [],
    loadDataAll: function(){
      this.offerData= <?=json_encode($oldOffer);?>; //or api
      if(this.offerData.length <3) {
        for(i=0; i<(3-this.offerData.length); i++)
          this.offerData.push({"id":-1, "user_id":$scope.conf.user_id, "description":"NA", "status": "Pending", "additional":"NA", "notes":"...notes"});
      }
    },
    currentEdit:{
      content: null,
      idx: null,
    },
    get: function(idx) {
      return this.offerData[idx];
    },
    writeOfferData: function(idx){
      $scope.api("Employee_reg/saveOfferHistory", this.offerData[idx], function(res){
        console.log(res.data);
      });
    },
    openGenericModal: function(idx) {
      this.currentEdit.content= this.offerData[idx].additional;
      this.currentEdit.idx= idx;
      $scope.loadModel('genericModal', true);
    },
    changeAdditionalInformation: function() {
      this.offerData[this.currentEdit.idx].additional= this.currentEdit.content;
      this.writeOfferData(this.currentEdit.idx);
      $scope.loadModel('genericModal', false);
    }
  }

  //general
  $scope.test= function() {
    console.log("ALIVE");
    alert("ALIVE");
  }

  $scope.getFormData= function (object) {
    const formData = new FormData();
    Object.keys(object).forEach(key => formData.append(key, object[key]));
    return formData;
  }

  $scope.loadModel= function (name, bool) {
      if(bool)
        document.getElementById(name).style.display='block';
      else
        document.getElementById(name).style.display='none';
  }

  $scope.printContent= function(divName){
    var printContents = document.getElementById(divName).innerHTML;
    var popupWin = window.open('', '_blank', 'width=700,height=700');
    popupWin.document.open();
    popupWin.document.write('<html><head><link rel="stylesheet" type="text/css" href="style.css" /></head><body onload="window.print()">' + printContents + '</body></html>');
    popupWin.document.close();
  }
  //api
  $scope.resource= function(url, operation, data, callback) {
    $scope.api(url, {"operation":operation, "data":data}, callback);
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
      //use response.flag to get information about operation performed
      callback(response);
    });
  }

  $scope.flash= function(msg){
    console.log(msg);
  }

  loader();
});
</script>
