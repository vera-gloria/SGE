<html>
    <meta charset="utf-8">
    <head>
        <link ref="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="paginacao.js"></script>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript"></script>
        <link href="<?php echo base_url('css/interno/email/style.css') ?>" rel='stylesheet' type='text/css' />
        <script src="<?php echo base_url('js/paginacao.js') ?>"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
        <script type="text/javascript" sr="//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script> 
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#paginacao').DataTable();

            });

        </script>
    </head>
    <body>
        <div class="container">
<div>
            <a href="javascript:window.history.go(-1)"><img align="center" class="img-responsive voltar" src="<?= base_url('images/voltar.png') ?>" width="50" height="50"></a>
        </div>  
            <div class="mail-box">
                <aside class="sm-side">
                    <div class="user-head">
                        <img  width="64" hieght="60" src="images/admin.jpg">
                        <a href="#"><?php echo $nomeusuario; ?></a>
                    </div>
                   
                    <div class="inbox-body">
                        <a href="<?= base_url('/email/escreveremail') ?>" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                            Escrever
                        </a>
                        <!-- Modal -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Compose</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">To</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="cc" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Subject</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Message</label>
                                                <div class="col-lg-10">
                                                    <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" name="files[]" multiple="">
                                                    </span>
                                                    <button class="btn btn-send" type="submit">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                    <ul class="inbox-nav inbox-divider">
                        <li class="active">
                            <a href="#"><i class="fa fa-inbox"></i> Entrada <span class="label label-danger pull-right">2</span></a>

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o"></i> E-mail Enviado</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bookmark-o"></i> Importante</a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-trash-o"></i> Lixeira</a>
                        </li>
                    </ul>


                    <div class="inbox-body text-center">
                        <div class="btn-group">
                            <a class="btn mini btn-primary" href="javascript:;">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn mini btn-success" href="javascript:;">
                                <i class="fa fa-phone"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn mini btn-info" href="javascript:;">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>

                </aside>
                <aside class="lg-side">
                    
                    <div class="inbox-head">
                        <h3>Inbox</h3>

                    </div>
                    <div class="inbox-body">
                        <div class="mail-option">
                            <div class="chk-all">
                                <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                        Todos
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> Lidos</a></li>
                                        <li><a href="#"> Não Lidos</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                    Mais
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Marcar como lida</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Excluir</a></li>
                                </ul>
                            </div>



                        </div>
                        <table id="paginacao" class="table table-inbox table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message  dont-show">PHPClass</td>
                                    <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message  text-right">9:27 AM</td>
                                </tr>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Google Webmaster </td>
                                    <td class="view-message">Improve the search presence of WebSite</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 15</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">JW Player</td>
                                    <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 15</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Tim Reid, S P N</td>
                                    <td class="view-message">Boost Your Website Traffic</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">April 01</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                    <td class="view-message">Stop wasting your visitors </td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">May 23</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">WOW Slider </td>
                                    <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">March 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">LinkedIn Pulse</td>
                                    <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">Feb 19</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                                    <td class="view-message view-message">Welcome to the Drupal Community</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 04</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Somebody requested a new password </td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">June 13</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Skype <span class="label label-info pull-right">family</span></td>
                                    <td class="view-message view-message">Password successfully changed</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 24</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">Google+</td>
                                    <td class="view-message">alireza, do you know</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 09</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="dont-show">Zoosk </td>
                                    <td class="view-message">7 new singles we think you'll like</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">May 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">LinkedIn </td>
                                    <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">February 25</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="dont-show">Facebook</td>
                                    <td class="view-message view-message">Your account was recently logged into</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Twitter</td>
                                    <td class="view-message">Your Twitter password has been changed</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">April 07</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                    <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">July 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">AddMe.com</td>
                                    <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">August 10</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Terri Rexer, S P N</td>
                                    <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">April 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Bertina </td>
                                    <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">June 16</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                    <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">August 10</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
        </div>
    </body>
</html>