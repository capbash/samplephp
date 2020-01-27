CREATE SEQUENCE actions_id_seq
  START WITH 1
  INCREMENT BY 1
  NO MINVALUE
  NO MAXVALUE
  CACHE 1;

CREATE TABLE actions (
  id integer NOT NULL DEFAULT nextval('actions_id_seq'::regclass),
  name character varying(255),
  entity_type character varying(255),
  entity_id character varying(255),
  data jsonb,
  inserted_at timestamp without time zone NOT NULL,
  updated_at timestamp without time zone NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE schema_migrations (
  migration varchar(255),
  migrated_at time,
  PRIMARY KEY (migration)
);

-- Ensure all migrations are added
INSERT INTO schema_migrations
  (migration, migrated_at)
VALUES
  ('20170202221740_add_actions.sql', '2017-02-02 22:17:40'),
  ('20200127122800_add_migrations.sql', '2020-01-27 12:28:00');