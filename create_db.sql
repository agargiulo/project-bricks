/*
Database              pg 9_0
Project Name        project_bricks [csh]
Project Version      Branch trunk - Version 4
Version Date         2011-11-02 0:32 GMT
Generated on        2011-11-02 0:33 GMT
Author              Anthony Gargiulo <agargiulo@anthonygargiulo.info>
*/


DROP DATABASE "bricks";

/*
This section creates all database objects defined in your project. 
If any of the objects already exists in the database, the psql client program
	may raise an error while continuing the execution of the rest of the script.
*/

CREATE DATABASE "bricks" ENCODING 'UTF8';

\connect bricks;

BEGIN;
CREATE TABLE "public"."projects"(
"name" TEXT NOT NULL,
"description" TEXT NOT NULL DEFAULT 'this is a lovely project, but its owner forgot to give it a description',
"date_completed" DATE NOT NULL DEFAULT current_date,
"lead" TEXT NOT NULL,
CONSTRAINT "project_name_pkey" PRIMARY KEY ("name")
)
WITHOUT OIDS;

CREATE TABLE "public"."users"(
"username" TEXT NOT NULL,
CONSTRAINT "username_pkey" PRIMARY KEY ("username")
)
WITHOUT OIDS;

CREATE TABLE "public"."contributors"(
"project" TEXT NOT NULL,
"username" TEXT NOT NULL
)
WITHOUT OIDS;

COMMENT ON TABLE "projects" IS 'All of the project bricks';

COMMENT ON COLUMN "projects"."name" IS 'name of the project';

COMMENT ON COLUMN "projects"."description" IS 'the description of the project';

COMMENT ON COLUMN "projects"."date_completed" IS 'the date on which the project was completed, defaults to the current date';

COMMENT ON COLUMN "contributors"."project" IS 'the name of the project';

ALTER TABLE "public"."contributors" ADD CONSTRAINT "contributors_username_projectname" UNIQUE ("username","project");

COMMENT ON CONSTRAINT "contributors_username_projectname" ON "public"."contributors" IS 'only one combination of project name and contributor username allowed';

ALTER TABLE "public"."projects" ADD CONSTRAINT "fk_projects_lead_username" FOREIGN KEY ("lead") REFERENCES "public"."users"("username") MATCH SIMPLE ON UPDATE RESTRICT ON DELETE RESTRICT;

ALTER TABLE "public"."contributors" ADD CONSTRAINT "fk_contributors_project_name" FOREIGN KEY ("project") REFERENCES "public"."projects"("name") MATCH SIMPLE ON UPDATE RESTRICT ON DELETE RESTRICT;

ALTER TABLE "public"."contributors" ADD CONSTRAINT "fk_contributors_username_username" FOREIGN KEY ("username") REFERENCES "public"."users"("username") MATCH SIMPLE ON UPDATE RESTRICT ON DELETE RESTRICT;

/* Make sure things are owned correctly */
ALTER DATABASE bricks OWNER TO bricks;
ALTER TABLE projects OWNER TO bricks;
ALTER TABLE users OWNER TO bricks;
ALTER TABLE contributors OWNER TO bricks;
COMMIT;
