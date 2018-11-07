<?php ?>
<script>
var app = angular.module('profileApp', []);

app.controller('cluster1', function($scope, $http) {

  function loader () {
    if($scope.conf.user_id!=null) {
      $scope.basicSection.loadDataAll()
      $scope.personalSeciton.loadDataAll();
      $scope.offerSection.loadDataAll();
    }
  };

  $scope.conf = {
    base: "<?=base_url();?>",
    user_id: <?=$id!==null? $id: "null";?>,
    base_url: function(url=""){
      return this.base + url;
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
    saveBasic: function() {
      $scope.resource("Employee_reg/basicDetailCRUD", "add", this.model, function(res){
        console.log(res.data);
      });
    },
  }
  //cluster 1
  $scope.cvSection= {
    cvData: <?=json_encode($oldCv);?>,
    displayImage: 0,

    getId: function() {
      if(this.cvData.length < 1)
        return;
      return this.cvData[this.displayImage].id;
    },

    getCvData: function() {
      if(this.cvData.length < 1)
        return;
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
      },
      education: {},
      awards: {},
      projects: {},
      skills: {},
      workExperience: {},
      references: {},
      defination: {
          education:{id:null, user_id: $scope.conf.user_id, institute: "", certificate: "", duration:""},
          awards:{id:null,user_id: $scope.conf.user_id, title: "", description: "", givenAt: "",},
          projects:{id:null,user_id: $scope.conf.user_id, title: "", description: "", givenAt: "",},
          skills:{id:null,user_id: $scope.conf.user_id, areaOfExpertise: "", specificSkill: "", rating: "",},
          workExperience:{id:null,user_id: $scope.conf.user_id, company: "", position: "", fromAt: "", toAt: "",},
          references:{id:null,user_id: $scope.conf.user_id, personName: "", occupation: "", address: "", email: "", contact: "",},
      },
      loadDataAll: function() { //use api or direct bind with php
        this.model.basic= <?=json_encode($details);?>;
        this.education= <?=json_encode($education);?>; this.education.push(JSON.clone(this.defination.education));
        this.awards= <?=json_encode($awards);?>; this.awards.push(JSON.clone(this.defination.awards));
        this.projects= <?=json_encode($projects);?>; this.projects.push(JSON.clone(this.defination.projects));
        this.skills= <?=json_encode($skills);?>; this.skills.push(JSON.clone(this.defination.skills));
        this.workExperience= <?=json_encode($experience);?>; this.workExperience.push(JSON.clone(this.defination.workExperience));
        this.references= <?=json_encode($references);?>; this.references.push(JSON.clone(this.defination.references));
      },
      saveBasic: function() {
        $scope.resource("Employee_reg/detailsCRUD", "add", this.model.basic, function(res){
          console.log(res.data);
        });
      },
      saveListItem: function(controller, list, idx, define, id="id"){
        $scope.resource("Employee_reg/"+controller, "add", list[idx], function(res){
          if(res.data.flag=="created"){
            list[idx][id] = res.data[id];
            console.log($scope.personalSeciton.education[idx]);
            list.push(JSON.clone(define));
          }
        });
      },
      deleteListItem: function(controller, list, idx, id=""){
        $scope.resource("Employee_reg/"+controller, "delete", list[idx], function(res){
          if(res.data.flag=="deleted"){
            list.splice(idx,1);
          }
        });
      },
  }
  $scope.offerSection= {
    offerData: [],
    maxLength: 0,
    loadDataAll: function(){
      this.offerData= <?=json_encode($oldOffer);?>; //or api
      this.maxLength= this.offerData.length + 1;
      if(this.offerData.length <3) {
        len= this.offerData.length;
        for(i=0; i<(3-len); i++)
          this.offerData.push({"id":((i+1)*-1), "user_id":$scope.conf.user_id, "description":"", "status": "", "additional":"", "notes":""});
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
      //console.log(idx + " " +this.maxLength);
      $scope.api("Employee_reg/saveOfferHistory", this.offerData[idx], function(res){
        //console.log(res.data);
        if(res.data.id!=null){
          $scope.offerSection.offerData[idx].id = res.data.id;
          $scope.offerSection.maxLength++;
          //$scope.$apply();
          console.log($scope.offerSection.maxLength);
        }
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
    },
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

  JSON.clone = function(obj) {
    return JSON.parse(JSON.stringify(obj));
  };

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
