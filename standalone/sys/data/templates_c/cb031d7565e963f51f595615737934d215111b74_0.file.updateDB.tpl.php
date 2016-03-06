<?php /* Smarty version 3.1.27, created on 2016-03-06 14:39:33
         compiled from "/var/www/163.17.210.131/htdocs/pinyin/sys/templates/updateDB.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13701554356dc4125f23e59_28408095%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb031d7565e963f51f595615737934d215111b74' => 
    array (
      0 => '/var/www/163.17.210.131/htdocs/pinyin/sys/templates/updateDB.tpl',
      1 => 1456895074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13701554356dc4125f23e59_28408095',
  'variables' => 
  array (
    'keep_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dc4126005891_48469279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dc4126005891_48469279')) {
function content_56dc4126005891_48469279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13701554356dc4125f23e59_28408095';
?>


<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-animate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.1.2.js"><?php echo '</script'; ?>
>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
        body {
                font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", sans-serif;
        }

        table.table {
                font-size: 18px;
		margin-left:auto; 
		margin-right:auto;
		text-align:center;
        }
        table.table td{
		text-align:center; vertical-align:middle;
	}
        table.table th {
		text-align:center; vertical-align:middle;
	}

        table.submitdata {
                font-size: 16px;
        }

</style>


  </head>
  <body ng-app="ui.bootstrap.demo" ng-controller="ButtonsCtrl" class="container">

 <table class="table table-hover table-condensed table-striped table-bordered" cellspacing="0" width="100%">
    <tr class="danger">
      <th width="5%">
    <button type="button" class="btn btn-warning" ng-model="model999" uib-btn-checkbox btn-checkbox-true="1" btn-checkbox-false="0" ng-click="setAll(model999)"> 全部 </button>

</th>
      <th>輸出</th>
      <th>座號</th>
      <th>學號</th>
      <th>姓名</th>
      <th>新譯音</th>
      <th>原記錄</th>
    </tr>

<?php
$_from = $_smarty_tpl->tpl_vars['keep_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
    <tr>
      <td>
    <button type="button" class="btn btn-primary" ng-model="obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].model" uib-btn-checkbox btn-checkbox-true="1" btn-checkbox-false="0" ng-click="switchValue(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)" > {{obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].button_msg}}</button>
</td>
      <td>{{obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].submit_name}} </td>
      <td><?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['number'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['user_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['new_eng_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['exist_eng_name'];?>
</td>
    </tr>
<?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>
  </tbody>
</table>

    <button type="button" class="btn btn-danger" ng-model="getAll" ng-click="getAll()"> 送出 </button>

<?php echo '<script'; ?>
 type="text/ng-template" id="myModalContent.html">
        <div class="modal-header">
            <h3 class="modal-title">異動結果 </h3>
        </div>
	 <div class="modal-body">
	    <b>{{ selected.item }}</b>
	</div>
        <div class="modal-footer">
            <button class="btn btn-warning" type="button" ng-click="cancel()">OK</button>
        </div>
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
//http://blog.miniasp.com/post/2013/07/23/AngularJS-five-ways-to-register-ngController.aspx
angular.module('ui.bootstrap.demo', ['ngAnimate', 'ui.bootstrap']);

angular.module('ui.bootstrap.demo').controller('ButtonsCtrl', ['$scope', '$http','$uibModal','$log', function ($scope,$http,$uibModal,$log) {

$scope.animationsEnabled = true;
$scope.items = 'null';
$scope.obj = new Object();

$scope.model999 = 0;

<?php
$_from = $_smarty_tpl->tpl_vars['keep_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
	$scope.obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
] = new Object();
	$scope.obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].id = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
";
	$scope.obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].model = 1;
	$scope.obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].exist_eng_name = "<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['exist_eng_name'];?>
";
	$scope.obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].new_eng_name = "<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['new_eng_name'];?>
";
	$scope.obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].submit_name = "<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['new_eng_name'];?>
";
	$scope.obj[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
].button_msg = "新";

<?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>


  $scope.switchValue = function (id){
	if (id in $scope.obj){
		if ($scope.obj[id].model == 1){
		  //console.log($scope.obj[id].new_eng_name)
		  $scope.obj[id].submit_name = $scope.obj[id].new_eng_name;
		  $scope.obj[id].button_msg = "新";
		}else{
		  //console.log($scope.obj[id].exist_eng_name)
		  $scope.obj[id].submit_name = $scope.obj[id].exist_eng_name;
		  $scope.obj[id].button_msg = "原";
		  
		}
	}
    //console.log($scope.obj[9902]);
  }

  $scope.setAll = function (value){
	for(var key in $scope.obj) {
		//console.log($scope.obj[key]);
		if (value == 1){
			$scope.obj[key].model = 1;
			$scope.obj[key].submit_name = $scope.obj[key].new_eng_name;
			$scope.obj[key].button_msg = "新";
		}else{
			$scope.obj[key].model = 0;
			$scope.obj[key].submit_name = $scope.obj[key].exist_eng_name;
			$scope.obj[key].button_msg = "原";
		}
		//console.log(value);
	}
  }


  $scope.getAll = function (){
	var users = new Object();
	for(var key in $scope.obj) {
		if ($scope.obj[key].model == 1){
		$scope.method = 'POST';
		$scope.url = '../json_update_stud_eng.php';
		//console.log($scope.obj[key].id);
		//console.log($scope.obj[key].submit_name);

		users[key] = {
				id: $scope.obj[key].id,
				name: $scope.obj[key].submit_name
			     };


	
		} //end if
	}//end for

		  $http({method: $scope.method,
			data: users,
			headers: {
			   'Content-Type': 'application/x-www-form-urlencoded'
			 },
			 url: $scope.url})
		    .then(function(response) {
			$scope.status = response.status;
			  $scope.items = response.data;
			  console.log($scope.items);
			
			  $scope.open('lg');
				
			}, function(response) {
			$scope.data = response.data || "Request failed";
			  $scope.items = response.data;
			$scope.status = response.status;
		});



  } //end $scope.getAll

  //$scope.items = ['item1', 'item2', 'item3'];
   $scope.items = "item1";
   $scope.open = function(size) {
  
      var modalInstance = $uibModal.open({
        animation: $scope.animationsEnabled,
        templateUrl: 'myModalContent.html',
        controller: 'ModalInstanceCtrl',
        size: size,
        resolve: {
          items: function() {
            return $scope.items;
          }
        }
      });
  
      modalInstance.result.then(function(selectedItem) {
        $scope.selected = selectedItem;
      }, function() {
        $log.info('Modal dismissed at: ' + new Date());
      });
  };




}]);

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>

angular.module('ui.bootstrap.demo').controller('ModalInstanceCtrl', function($scope, $uibModalInstance, items,$window) {

    $scope.items = items;
    $scope.selected = {
    item: $scope.items
    };

/*
  $scope.ok = function() {
    $uibModalInstance.close($scope.selected.item);
  };
*/
  $scope.cancel = function() {
    $uibModalInstance.dismiss('cancel');
	$window.close()
  };
});


<?php echo '</script'; ?>
>


</body>
</html>

<?php }
}
?>