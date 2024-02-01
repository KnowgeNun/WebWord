<?php 
session_start();
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>

    <style>
        .dislikes.active{
            background:red !important;
        }
    </style>


     <!-- google -->
     <!-- <script src="https://accounts.google.com/gsi/client" async></script> -->
     <!-- <meta name="google-signin-scope" content="profile email"> -->
     <meta name="google-signin-client_id" content="962767317975-mgjs7c6esrs437j5g6p7bigi1age0b15.apps.googleusercontent.com">
    
     <script src="https://apis.google.com/js/platform.js" async defer></script>
     
     
   
    
     <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/like-dislike.css" rel="stylesheet">





</head>

<body id="page-top">


    
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WORD </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Vocabulary</span></a>
            </li>
              
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form id="search-sort-form" method="get" action=""
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input id="sortInput" type="text" class="d-none" name="sort" value="<?php echo isset($_GET['sort']) ? $_GET['sort'] : 'like'; ?>">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2" name="search">
                            <div class="input-group-append">
                                <div class="btn btn-primary" onclick="submitSearchAndSort('search');">
                                    <i class="fas fa-search fa-sm"></i>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                     
                        
<!-- 
                        <script>
                         function onSignIn(googleUser) {
  var id_token = googleUser.getAuthResponse().id_token;
}   
 </script> -->

 <?php 
if(isset($_SESSION['access_token'])):

?>
 <!-- Nav Item - Alerts -->

 
<li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['name']?></span>
                                <img class="img-profile rounded-circle"
                                    src=" <?php echo $_SESSION['picture']?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?php echo $_SESSION['email']?>
                                </a>
                                
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>

                            
</li>


       

 




<!-- 
                 <div id="g_id_onload"
                        data-client_id="962767317975-mgjs7c6esrs437j5g6p7bigi1age0b15.apps.googleusercontent.com"
                        data-context="signin"
                        data-ux_mode="redirect"
                        data-login_uri="http://localhost/Project-a/callback.php"
                        data-auto_prompt="false">
                   </div>
                   
                   <div class="g_id_signin"
                        data-type="standard"
                        data-shape="rectangular"
                        data-theme="filled_blue"
                        data-text="signin_with"
                        data-size="large"
                        data-logo_alignment="left">
                   </div> -->






            
                      

                    </ul>
                    </nav> 
                <form id="postForm" action="/Project-a/addpost.php" method="post">
                    
                    <div class="card shadow mb-4 peet">
                                <input type="text" class="form-control "  placeholder="Word" name="word">    
                                <input type="text" class="form-control "  placeholder="Meaning" name="meaning">
                                </div>
                    <!-- <div class="  mb-4 peet1">           
                        <input style="width: 100px;" value="โพสต์" type="submit"  class="btn btn-primary" >
                    </div> -->
                </form>

                <div class="mb-4 peet1 d-flex">
                    <input style="width: 100px;" value="โพสต์" type="button" class="btn btn-primary" onclick="submitForm()">
                    <button class="btn btn-primary mx-2 text-nowrap" onclick="submitSearchAndSort('sort')"><?php echo isset($_GET['sort']) ? $_GET['sort'] == 'like' ? 'เรียงลำดับโพสต์ล่าสุด' : 'เรียงลำดับไลค์ล่าสุด' : 'เรียงลำดับโพสต์ล่าสุด'; ?></button>
                </div>

               


<?php 
else:
?>


<button   onclick="document.location='/Project-a/callback.php'" class="btn btn-primary">Sign in with Google</button>


<?php 
endif;
?>
 </nav>     
 <?php
    $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
    $sortTerm = isset($_GET['sort']) ? $_GET['sort'] == 'time' ? 'ORDER BY meaning.timestamp DESC;' : 'ORDER BY count_like DESC;' : 'ORDER BY count_like DESC;';
    $join_sql = "";
    $where_sql = "";
    $sql = "SELECT 
    word.id as word_id, 
    word.word as word,
    user.id as user_id,
    user.pic as pic, 
    user.firstname, 
    user.lastname, 
    meaning.id as meaning_id, 
    meaning.timestamp as meaning_timestamp, 
    meaning.meaning as meaning,
    COALESCE(like_counts.count_like, 0) as count_like,
    COALESCE(unlike_counts.count_unlike, 0) as count_unlike,
    COALESCE(report_counts.count_report, 0) as count_report";
    if (isset($_SESSION['access_token'])) {
        $user_id = $_SESSION['user_id'];
        $sql .= ",like_status.like as likeStatus";
        $sql .= ",COALESCE(report_status.user_id IS NOT NULL, 0) as reportStatus";
        $where_sql .= "WHERE user_id = $user_id";
        $join_sql .= "LEFT JOIN (
            SELECT 
                meaning_id,user_id
            FROM report
            WHERE user_id = $user_id
            GROUP BY meaning_id
        ) report_status ON meaning.id = report_status.meaning_id";
    } 
    $sql .= " FROM word 
    LEFT JOIN meaning ON word.id = meaning.word_id
    LEFT JOIN user ON user.id = meaning.user_id
    LEFT JOIN report ON meaning.id = report.meaning_id
    $join_sql
    LEFT JOIN (
        SELECT 
            meaning_id,user_id,`like`
        FROM reaction
        $where_sql 
        GROUP BY meaning_id
    ) like_status ON meaning.id = like_status.meaning_id
    LEFT JOIN (
        SELECT 
            meaning_id,
            SUM(CASE WHEN `like` = 1 THEN 1 ELSE 0 END) as count_like
        FROM reaction
        GROUP BY meaning_id
    ) like_counts ON meaning.id = like_counts.meaning_id
    LEFT JOIN (
        SELECT 
            meaning_id,
            SUM(CASE WHEN `like` = 0 THEN 1 ELSE 0 END) as count_unlike
        FROM reaction
        GROUP BY meaning_id
    ) unlike_counts ON meaning.id = unlike_counts.meaning_id
    LEFT JOIN (
        SELECT
            meaning_id,
            COUNT(DISTINCT id) as count_report
        FROM report
        GROUP BY meaning_id
    ) report_counts ON meaning.id = report_counts.meaning_id";
    if (!empty($searchTerm)) {
        $sql .= " WHERE word.word LIKE '%" . $db->real_escape_string($searchTerm) . "%' OR user.firstname LIKE '%" . $db->real_escape_string($searchTerm) . "%' OR user.lastname LIKE '%" . $db->real_escape_string($searchTerm) . "%'";
    }
    $sql .= "   GROUP BY word.id,user.id,meaning.id
                $sortTerm";
    $result = $db->query($sql);
    

while ($row = $result->fetch_assoc()) : ?>
    <div class="card shadow mb-4 peet">
        <div class="card-header">
            <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                <div>
                    <img 
                        src="<?php echo $row['pic'];?>" 
                        style="border-radius:50%;width:40px;height:40px;" alt=""
                    >
                    <b class="ml-1"><?php echo $row['firstname'];?></b>
                    <b class="ml-1"><?php echo $row['lastname'];?></b>
                </div>
                <div class="d-flex flex-column align-items-start">
                    <small><?php echo date("Y-m-d", strtotime($row['meaning_timestamp']));?></small> 
                    <small><?php echo substr($row['meaning_timestamp'], 11, 8);?></small>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center w-100">
                <h6 class="font-weight-bold text-primary m-0"><?php echo $row['word']; ?></h6>
            </div>
            <!-- <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="delete.php?word_id=<?php echo $row['word_id']; ?>">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>ลบ
                    </a>
                </div>
            </div> -->
        </div>
        <!-- Card Header - Dropdown -->

        <!-- Card Body -->
        <div class="card-body">
            <?php echo $row['meaning']; ?>
        </div>

<?php 
if(isset($_SESSION['access_token'])):
?>

        <div class="p-2 w-100 d-flex justify-content-between">
            <div class="d-flex">
                <div onclick="reactionProcess(this,'like' , <?php echo $row['meaning_id']; ?>)" class="card-button-reaction py-1 px-2 <?php echo $row['likeStatus'] === "1" ? 'active' : ''; ?>">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <span class="like"><?php echo $row['count_like']; ?></span>
                </div>
                <div onclick="reactionProcess(this,'dislike' , <?php echo $row['meaning_id']; ?>)" class="dislikes card-button-reaction-dislike py-1 px-2 mx-1 <?php echo $row['likeStatus'] === "0" ? 'active' : ''; ?>">
                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                    <span class="dislike"><?php echo $row['count_unlike']; ?></span>
                </div>
            </div>
            <div onclick="reportProcess( <?php echo $row['user_id']; ?>, <?php echo $row['meaning_id']; ?>)" class="card-button-reaction report p-1 <?php echo $row['reportStatus'] === "1" ? 'active' : ''; ?>">
                <i class="fa fa-flag" aria-hidden="true"></i>
                <span><?php echo $row['count_report']; ?></span>
            </div>
        </div>

<?php 
else:
?>

    <div class="p-2 w-100 d-flex justify-content-between">
            <div class="d-flex">
                <div onclick="reactionProcess(this,'like' , <?php echo $row['meaning_id']; ?>)" class="card-button-reaction py-1 px-2 ms-1">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <span><?php echo $row['count_like']; ?></span>
                </div>
                <div onclick="reactionProcess(this,'dislike' , <?php echo $row['meaning_id']; ?>)" class="card-button-reaction-dislike py-1 px-2">
                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                    <span><?php echo $row['count_unlike']; ?></span>
                </div>
            </div>
            <div onclick="reportProcess(null,null)" class="card-button-reaction report p-1">
                <i class="fa fa-flag" aria-hidden="true"></i>
                <span><?php echo $row['count_report']; ?></span>
            </div>
        </div>

<?php 
endif;
?>
    </div>
<?php endwhile; ?>


                    
                    
                <!-- End of Topbar -->

                
























                
                   <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ต้องการออกจากระบบ</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-primary" href="logout.php">ออกจากระบบ</a>
                </div>
            </div>
        </div>
    </div>      






  
    
             

              
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Modal -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function submitForm() {
            document.getElementById("postForm").submit();
        }

        function submitSearchAndSort(button){
            if(button === 'sort'){
                let sortInput = document.getElementById('sortInput');
                sortInput.value = (sortInput.value === 'like') ? 'time' : 'like';
            }
            document.getElementById("search-sort-form").submit();
        }


        async function reactionProcess(element,_case ,meaning_id){
            let isLoggedIn = <?php echo isset($_SESSION['access_token']) ? 'true' : 'false'; ?>;
            if(!isLoggedIn){
                window.location.href = 'callback.php';
            }else{
                let result = await postReactions(_case ,meaning_id);
                let status = result.status

                if(result.status){
                    let container = $(element).parent();
                    let likeCountElement = $(element).find('.like');
                    let dislikeCountElement = $(element).find('.dislike');
                    let currentLikeCount = parseInt(likeCountElement.text());
                    let currentDisLikeCount = parseInt(dislikeCountElement.text());

                    let C_likeCountElement = $(element).closest('.d-flex').find('.like');
                    let C_dislikeCountElement = $(element).closest('.d-flex').find('.dislike');
                    let C_currentLikeCount = parseInt(C_likeCountElement.text());
                    let C_currentDislikeCount = parseInt(C_dislikeCountElement.text());

                    switch(status){
                        case "unliked":
                            likeCountElement.text(currentLikeCount - 1);
                            element.classList.toggle("active", false);
                            break;
                        case "liked":
                            likeCountElement.text(currentLikeCount + 1);
                            element.classList.toggle("active", true);
                            break;
                        case "disliked":
                            dislikeCountElement.text(currentDisLikeCount + 1);
                            element.classList.toggle("active", true);
                            break;
                        case "unDisliked":
                            dislikeCountElement.text(currentDisLikeCount - 1);
                            element.classList.toggle("active", false);
                            break;
                        case "dislike -> liked":
                            container.find('.card-button-reaction-dislike').removeClass('active');
                            element.classList.toggle("active", true);

                            C_likeCountElement.text(C_currentLikeCount + 1);
                            C_dislikeCountElement.text(C_currentDislikeCount - 1);

                            break;

                        case "liked -> disliked":
                            container.find('.card-button-reaction').removeClass('active');
                            element.classList.toggle("active", true);

                            C_likeCountElement.text(C_currentLikeCount - 1);
                            C_dislikeCountElement.text(C_currentDislikeCount + 1);

                            break;
                    }
                }
            }
        }

        function postReactions(_case, meaning_id) {
            return new Promise((resolve, reject) => {
                $.ajax({
                    type: "POST",
                    url: "reaction.php",
                    data: {
                        action: _case,
                        meaning_id: meaning_id
                    },
                    success: function (response) {
                        try {
                            const jsonResponse = JSON.parse(response);
                            resolve(jsonResponse);
                        } catch (error) {
                            resolve(response);
                        }
                    },
                    error: function (xhr, status, error) {
                        resolve(false);
                    }
                });
            });
        }

        function postReport(report_detail ,meaning_id ){
            return new Promise((resolve, reject) => {
                $.ajax({
                    type: "POST",
                    url: "report.php",
                    data: {
                        report_detail: report_detail,
                        meaning_id: meaning_id
                    },
                    success: function (response) {
                        try {
                            const jsonResponse = JSON.parse(response);
                            resolve(jsonResponse);
                        } catch (error) {
                            resolve(response);
                        }
                    },
                    error: function (xhr, status, error) {
                        resolve(false);
                    }
                });
            });
        }

        function reportProcess(user_id , meaning_id){
            let isLoggedIn = <?php echo isset($_SESSION['access_token']) ? 'true' : 'false'; ?>;
            if(!isLoggedIn){
                window.location.href = 'callback.php';
            }else{
                Swal.fire({
                    title: "รายงานโพสต์ที่ไม่เหมาะสม",
                    html: '<textarea style="resize: none;" id="reportDetails" class="form-control" placeholder="อธิบายว่าโพสต์นี้ไม่เหมาะสมอย่างไร....." rows="4"></textarea>',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Report"
                    }).then( async  (result) => {
                        if (result.isConfirmed) {

                            const reportDetails = document.getElementById('reportDetails').value;
                            let response = await postReport(reportDetails ,meaning_id);
                            if(response.status == 'insert' || response.status == 'update'){
                                    Swal.fire({
                                        title: "รายงานสำเร็จ!",
                                        
                                        icon: "success"
                                    }).then(()=>{
                                        location.reload();
                                    });
                            }else{
                                Swal.fire({
                                        title: "Reported!",
                                        text: "System error",
                                        icon: "error"
                                    });
                            }
                    }
                });
            }
        }
    </script>

</body>

</html>