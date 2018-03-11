<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" indent="yes" encoding="utf-8" standalone = "yes"/>
  <xsl:template match="council">
    <html>
      <body>
        <xsl:for-each select="@name">
          <h2>
            Council:
            <xsl:value-of select="."/>
          </h2>
          <div>
            <h3>Troop</h3>
            <div>
              <h4>Scout</h4>
              <table border="1">
                <tr>
                  <th>Rank</th>
                  <th>Date Earned</th>
                </tr>
              </table>
              <table border="1">
                <th>Merit Badge</th>
                <th>Date Earned</th>
              </table>
            </div>
          </div>
        </xsl:for-each>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
