$(document).ready(function () {
    
  var table = $('#paginacao').DataTable({
      pagingType: 'full_numbers',
      retrieve: true,
      language: {
          sEmptyTable: 'Nenhum registro encontrado',
          sInfo: 'Mostrando de _START_ até _END_ de _TOTAL_ registros',
          sInfoEmpty: 'Mostrando 0 até 0 de 0 registros',
          sInfoFiltered: '(Filtrados de _MAX_ registros)',
          sInfoPostFix: '',
          sInfoThousands: '.',
          sLengthMenu: '_MENU_ registros por página',
          sLoadingRecords: 'Carregando...',
          sProcessing: 'Processando...',
          sZeroRecords: 'Nenhum registro encontrado',
          sSearch: 'Pesquisar',
          oPaginate: {
              sNext: 'Próximo',
              sPrevious: 'Anterior',
              sFirst: 'Primeiro',
              sLast: 'Último'
          },
          oAria: {
              sSortAscending: ': Ordenar colunas de forma ascendente',
              sSortDescending: ': Ordenar colunas de forma descendente'
          }
      },
      tableTools: {
          sRowSelect: 'single'
      }
  });
 
  $('#paginacao').on('click', 'tr', function () {
      if ($(this).hasClass('selected')) {
          $(this).removeClass('selected');
      }
      else {
          table.$('tr.selected').removeClass('selected');
          $(this).addClass('selected');
      }
  });
});