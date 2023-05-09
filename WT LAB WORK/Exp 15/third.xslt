<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <!-- Match the root element and create the HTML document -->
  <xsl:template match="/">
    <html>
      <head>
        <title>Student Information</title>
      </head>
      <body>
        <h1>Student Information</h1>
        <table border="1">
          <tr>
            <th>Collage</th>
            <th>Class</th>
            <th>Name</th>
            <th>RollNo</th>
          </tr>
          <!-- Apply the "student" template to each "student" element -->
          <xsl:apply-templates select="//student" />
        </table>
      </body>
    </html>
  </xsl:template>

  <!-- Create an HTML row for each "student" element -->
  <xsl:template match="student">
    <tr>
      <td><xsl:value-of select="Collage" /></td>
      <td><xsl:value-of select="Class" /></td>
      <td><xsl:value-of select="Name" /></td>
      <td><xsl:value-of select="RollNo" /></td>
    </tr>
  </xsl:template>

</xsl:stylesheet>
