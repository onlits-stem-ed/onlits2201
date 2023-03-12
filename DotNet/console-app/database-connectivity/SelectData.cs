using Microsoft.Data.Sqlite;

namespace DatabaseConnectivity
{
    class SelectData
    {
        public void GetData()
        {
            SqliteConnection connection = new SqliteConnection("DataSource=crud_test.db");
            connection.Open();
            SqliteCommand command = new SqliteCommand();
            command.Connection = connection;
            command.CommandText = "SELECT * FROM student";
            SqliteDataReader dataReader = command.ExecuteReader();
            Console.WriteLine("Admission Number\tName");
            while(dataReader.Read())
            {
                Console.WriteLine(dataReader["admission_no"] + "\t" + dataReader["name"]);
            }
            connection.Close();
        }
    }
}