function createProject(){
  var projectName=document.getElementById('newProject').value;
  $.post("db/insertProject.php",{name:projectName}).done(function(data){
    //alert(data);
  });
}
function init(){
  $.post("db/selectProject.php").done(function(data){
    var projectList=JSON.parse(data);
    var contentCode='<table><caption>Project List</caption><thead><tr><th scope="col">No</th><th scope="col">Name</th>';
    contentCode=contentCode+'</tr></thead><tbody>';
    projectList.forEach(function(v){
      contentCode=contentCode+'<tr><td scope="row">'+v.no+'</td><td>'+v.dir_name+'</td></tr>';
    });
    contentCode=contentCode+'</tbody></table>';
    document.getElementById('contents').innerHTML=contentCode;
  });
}
window.onload=init();
// <table>
//   <caption>User List</caption>
//   <thead>
//     <tr>
//       <th scope="col">No</th>
//       <th scope="col">Name</th>
//     </tr>
//   </thead>
//   <tbody>
//     <tr>
//       <td scope="row">Leonard Hofstadter</td>
//       <td>07/06/2016</td>
//     </tr>
//   </tbody>
// </table>
