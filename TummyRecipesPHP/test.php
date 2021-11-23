<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       			<!-- Personal Info form -->
      <div class="row">

        <div class="col-md-12">
          <form name="basicForm" ng-submit="submitForm(basicForm.$valid)" class="form-horizontal form-bordered" novalidate>
          <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Personal Info</h1>
                <p>Please provide your name, email address (won't be published) and a summary.</p>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Name <span class="asterisk">*</span></label>
                  <div class="col-sm-9">
                    <input ng-model="user.name" type="text" name="name" class="form-control" placeholder="Type your name..." required />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Email <span class="asterisk">*</span></label>
                  <div class="col-sm-9">
                    <input ng-model="user.email" type="email" name="email" class="form-control" placeholder="Type your email..." required />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Headline</label>
                  <div class="col-sm-9">
                    <input ng-model="user.linkedin.headline" type="text" name="headline" class="form-control" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Summary </label>
                  <div class="col-sm-9">
                    <textarea ng-model="user.linkedin.summary" rows="5" class="form-control" placeholder="Type your comment..." required></textarea>
                  </div>
                </div>
              </div><!-- panel-body -->
          </div><!-- panel -->



              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </div>
                </div>
              </div>

    </body>
</html>
