<?php
echo "<script>console.log('scroll imported');</script>";
print "<style>

     ::-webkit-scrollbar {
      width: 10px;
    }


     ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }


     ::-webkit-scrollbar-thumb {
      background: grey;
      border-radius: 10px;
    }

     ::-webkit-scrollbar-thumb:hover {
      background: #12bbad;
    }
  </style> "

?>