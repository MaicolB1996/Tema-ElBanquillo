<?php
if ( in_category('nacional') ) {
  echo "
  <style>
  header .menu_mas {
    max-width: 100%;
    border-left: 0px;
  }

  .menu_mas nav {
    background-color: var(--nacional) !important;
    
  }
  .internas_log img {
    width: 24px;
    height: auto;
    float: left;
  }
  .mdg43 {
    display: none;
  }
  .internas_log {
    display:block ;
  }</style>
  ";
}else if ( in_category('millonarios') ) {
  echo "
  <style>
  header .menu_mas {
    max-width: 100%;
    border-left: 0px;
  }
  .mdg43 {
    display: none;
  }
  .menu_mas nav {
    background-color: var(--millonarios) !important;
    
  }
  .internas_log img {
    width: 24px;
    height: auto;
    float: left;
  }
  .internas_log {
    display:block ;
  }</style>
  ";
} else if ( in_category('america') ) {
  echo "
  <style>
  header .menu_mas {
    max-width: 100%;
    border-left: 0px;
  }
  .mdg43 {
    display: none;
  }
  .menu_mas nav {
    background-color: var(--america) !important;
    
  }
  .internas_log img {
    width: 24px;
    height: auto;
    float: left;
  }
  .internas_log {
    display:block ;
  }</style>
  ";
}
 ?>
