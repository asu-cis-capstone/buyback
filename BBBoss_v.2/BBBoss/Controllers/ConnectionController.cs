using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using BBBoss.Models;
using BBBoss.DataContexts;
using System.Data.SqlClient;
using System.Data.Linq.SqlClient;
using LinqToSqlShared;

namespace BBBoss.Controllers
{
    public class ConnectionController : Controller
    {
        //
        // GET: /Checkout/
        public BBBoss_SQLDataContext CreateConnectionString()
        {
            
            BBBoss_SQLDataContext dbconnect = new BBBoss_SQLDataContext();
            if (dbconnect == null)
            {
                dbconnect = new BBBoss_SQLDataContext(global::System.Configuration.ConfigurationManager.ConnectionStrings["LocalHostConnection"].ConnectionString);
            }
            
            return dbconnect;
        }

        
    }
}
