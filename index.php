<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <?php
    session_start();
     if(isset($_SESSION["id"])) {
        $name = $_SESSION["name"];
        $id = $_SESSION["id"];
            if($id === 1111){
                header("Location: ./admin/index.php");
            }
        echo "<title>Welcome, $name</title>";
     }else if(!isset($_SESSION["user_id"])) {
        header("Location: ./login/index.php?error=Not logged in");
     }
     
     
    ?>
</head>
<body>
    <div id = bottomNavBar>
        <div id = "tab_1" data-tab-value="#tab_1" class = "active">
            <div>
                <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg width="800px" height="800px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    
                    <title>profile [#1335]</title>
                    <desc>Created with Sketch.</desc>
                    <defs>
                    
                </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Dribbble-Light-Preview" transform="translate(-420.000000, -2159.000000)" fill="#ffffff">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                <path d="M374,2009 C371.794,2009 370,2007.206 370,2005 C370,2002.794 371.794,2001 374,2001 C376.206,2001 378,2002.794 378,2005 C378,2007.206 376.206,2009 374,2009 M377.758,2009.673 C379.124,2008.574 380,2006.89 380,2005 C380,2001.686 377.314,1999 374,1999 C370.686,1999 368,2001.686 368,2005 C368,2006.89 368.876,2008.574 370.242,2009.673 C366.583,2011.048 364,2014.445 364,2019 L366,2019 C366,2014 369.589,2011 374,2011 C378.411,2011 382,2014 382,2019 L384,2019 C384,2014.445 381.417,2011.048 377.758,2009.673" id="profile-[#1335]">
                                
                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <div id = "tab_2" data-tab-value="#tab_2">
            <div>
                <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg width="800px" height="800px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                    <title>plus [#1512]</title>
                    <desc>Created with Sketch.</desc>
                    <defs>
                    
                </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Dribbble-Light-Preview" transform="translate(-379.000000, -240.000000)" fill="#ffffff">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                <polygon id="plus-[#1512]" points="344 89 344 91 334.55 91 334.55 100 332.45 100 332.45 91 323 91 323 89 332.45 89 332.45 80 334.55 80 334.55 89">
                                
                </polygon>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <div id = "tab_3" data-tab-value="#tab_3">
            <div>
                <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg fill="#ffffff" width="800px" height="800px" viewBox="0 0 36 36" version="1.1"  preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>library-solid</title>
                    <path d="M12.75,3H5.25A1.15,1.15,0,0,0,4,4V33H14V4A1.15,1.15,0,0,0,12.75,3Z" class="clr-i-solid clr-i-solid-path-1"></path><path d="M33.77,31.09l-6.94-18.3a1,1,0,0,0-1.29-.58L22,13.59V9a1,1,0,0,0-1-1H16V33h6V14.69L28.93,33Z" class="clr-i-solid clr-i-solid-path-2"></path>
                    <rect x="0" y="0" width="36" height="36" fill-opacity="0"/>
                </svg>
            </div>
        </div>
    </div>

    <!--boiler plate-->
    <div class="tab-content">
        <div class="tabs__tab active" id="tab_1" data-tab-info>
          
            <div id = "container">
                <div id = "top">
                    <?php echo "<h1>$name</h1>";
                    echo "<h2>$id</h2>"?>
                </div>
                <div id = "logout" onclick = "window.location.href = './login/logout.php'"><h2>Logout</h2></div>
            </div>
  
        </div>
        <div class="tabs__tab active" id="tab_2" data-tab-info>
          <p>Hello Everyone.</p>
  
        </div>
        <div class="tabs__tab" id="tab_3" data-tab-info>
          <p>Learn cool stuff.</p>
  
        </div>

    <script defer>
        // Bottom tab handler
        const tabs = document.querySelectorAll('[data-tab-value]');
        const tabID = document.querySelectorAll('[id]');
        const tabInfos = document.querySelectorAll('[data-tab-info]');

        tabs.forEach(tab => {
          tab.addEventListener('click', () => {
            // Remove 'active' class from all tabs
            tabs.forEach(tab => {
              tab.classList.remove('active');
            });
            // Add 'active' class to the clicked tab
            tab.classList.add('active');
        
            // Hide all tab contents
            for(let i = 0; i < tabInfos.length; i++) {
                const tabid = tab.dataset.tabValue
                
                if(tabInfos[i].id == tabid.substr(1)){
                    tabInfos[i].classList.add('active');
                    continue;
                }else tabInfos[i].classList.remove('active');

            }
            
            // Show the content corresponding to the clicked tab
            //const targetInfo = document.querySelector(tab.dataset.tabValue);
            //targetInfo.classList.add('active');

            // Optional: Log the target content and its classList
          });
        });

    </script>
</body>
</html>