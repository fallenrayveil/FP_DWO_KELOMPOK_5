<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/whadventureworks?user=root&password=" catalogUri="/WEB-INF/queries/dwadventure.xml">

select {[Measures].[TotalDue],[Measures].[OrderQty]} ON COLUMNS,
  {([sales_territory],[waktu].[All Times],[customer],[produk].[All Produk],[specialoffer].[All SpecialOffer])} ON ROWS
from [Jual]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query WHADVENTURE using Mondrian OLAP</c:set>
