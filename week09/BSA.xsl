<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:template match="/">
    <html>
      <body>
        <h1>Boy Scouts of America</h1>
        <xsl:apply-templates select="bsa/council"/>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="bsa/council">
    <xsl:for-each select="@name">
      <h2>
        Council:
        <xsl:value-of select="."/>
      </h2>
    </xsl:for-each>
    <xsl:apply-templates select="troop"/>
    <br/>
  </xsl:template>

  <xsl:template match="troop">
    <xsl:param name="tNumber" select="@troopNumber"/>
    <xsl:param name="uName" select="@unitName"/>
    <xsl:for-each select="@troopNumber">
      <div>
        <h3>
          Troop #
          <xsl:value-of select="$tNumber"/>
          &#160;
          <xsl:value-of select="$uName"/>
        </h3>
        <h4>Scouts</h4>
        <!--<xsl:apply-templates select="scout"/>-->
      </div>
    </xsl:for-each>
  </xsl:template>

  <xsl:template match="scout">
    <div>
      <xsl:apply-templates mode="address" />
    </div>
  </xsl:template>

  <xsl:template match="address">
    <div>
      Address:
    </div>
  </xsl:template>
  
  <!--<xsl:template match="rank">
    <table border="1">
      <tr>
        <th>Rank</th>
        <th>Date Earned</th>
      </tr>
    </table>
  </xsl:template>
  
  <xsl:template match="meritBadge">
    <table border="1">
      <tr>
        <th>Merit Badge</th>
        <th>Date Earned</th>
      </tr>
    </table>
  </xsl:template>-->

</xsl:stylesheet>
